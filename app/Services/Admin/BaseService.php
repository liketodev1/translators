<?php


namespace App\Services\Admin;


use App\Models\PrivacyPolicy;
use App\Models\Term;

class BaseService
{
    /**
     * @var
     */
    protected $baseValidator;

    /**
     * @var
     */
    protected $validationErrors;

    /**
     * @var
     */
    protected $baseModel;

    /**
     * @param $model
     */
    protected function set_model($model)
    {
        $this->baseModel = $model->query();
    }

    /**
     * @param $errors
     */
    public function setValidationErrors($errors)
    {
        $this->validationErrors = $errors;
    }

    /**
     * @param $validator
     * @param $data
     * @param array $options
     * @return bool
     */
    public function validate($validator, $data)
    {
        $valid = $validator->valid($data);
        if (!$valid->fails()) {
            return true;
        }

        $this->setValidationErrors($valid->errors());
        return false;
    }

    /**
     * @return mixed
     */
    public function getValidationErrors()
    {
        return $this->validationErrors;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        $items = $this->baseModel->paginate(15, ["id", 'title', "description"]);
        return $items;
    }

    /**
     * @param $data
     * @return bool
     */
    public function store($data)
    {
        if (!$this->validate($this->baseValidator, $data)) {
            return false;
        }

        return $this->baseModel->create($data);

    }

    /**
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $item = $this->baseModel->find($id, ["id", 'title', "description"]);
        return $item;
    }

    /**
     * @param $id
     * @param $data
     * @return bool
     */
    public function update($id, $data)
    {
        $item = $this->baseModel->find($id, [
            'id',
        ]);

        if (is_null($item)) {
            return false;
        }

        if (!$this->validate($this->baseValidator, $data)) {
            return false;
        }

        return $item->update($data);
    }

    /**
     * @param $id
     * @return int
     */
    public function delete($id)
    {
        $privacy = $this->baseModel->find($id);
        if (!$privacy){
            return false;
        }
        $deleted = $privacy->delete();
        return $deleted;
    }

}
