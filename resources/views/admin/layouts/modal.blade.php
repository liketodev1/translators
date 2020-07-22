<div class="modal fade" id="modal-sm">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Do you wont delete ?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-footer justify-content-between">
                <form method="post" action="" id="delete-item">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                        Yes
                    </button>
                </form>
                <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">No</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

