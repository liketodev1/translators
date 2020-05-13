<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    /**
     * @var
     */
    protected $baseService;

    /**
     * @var
     */
    protected $baseView;

    /**
     * @var
     */
    protected $baseFlashName;

    /**
     * @var
     */
    protected $baseRoute;


    /**
     * @param string $message
     * @param string $model
     * @param null $service
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectBackWithErrors($message = '', $model = '', $service = null)
    {
        if ($service === null) {
            $service = $this->baseService;
        }

        if (empty($message)) {
            $model = (empty($model) ? 'Base Model' : $model);
            $message = sprintf('%s can not be saved. Please see errors below', $model);
        }

//        flash($message, 'danger');

        return redirect()->back()->withInput()->withErrors($service->getValidationErrors());
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $items = $this->baseService->index();
        return view($this->baseView.".index", compact("items"));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view($this->baseView.".create");
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $result = $this->baseService->store($request->all());
        if ($result) {
            flash($this->baseFlashName.' created', 'success');
            return redirect()->route($this->baseRoute.".index");
        }
        return $this->redirectBackWithErrors('');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function edit($id)
    {
        $item = $this->baseService->edit($id);
        if (!$item) {
            flash($this->baseFlashName.' not found!', 'danger');
            return redirect()->back();
        }
        return view($this->baseView.".edit", compact('item'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $result = $this->baseService->update($id, $request->all());
        if ($result) {
            flash($this->baseFlashName.' updated', 'success');
            return redirect()->route($this->baseRoute.".index");
        }
        return $this->redirectBackWithErrors('item can not be updated. Please see errors below');

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        if ($this->baseService->delete($id)) {
            flash($this->baseFlashName.' cancelled', 'success');
            return redirect()->route($this->baseRoute.".index");
        }
        return $this->redirectBackWithErrors('item can not be deleted.');

    }

}
