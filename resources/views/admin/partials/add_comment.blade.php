<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddComment" aria-labelledby="offcanvasAddCommentLabel">
    <div class="offcanvas-header border-bottom p-4">
        <h5 class="offcanvas-title fs-18 mb-0" id="offcanvasAddCommentLabel">Add New Comment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-4">
        <form action="{{ route('admin.student_comment.store') }}" method="post">
            @csrf
            <div class="form-group mb-4">
                <label class="label">Name</label>
                <input type="text" name="student_name" class="form-control text-dark" placeholder="Name">
            </div>
            <div class="form-group mb-4">
                <label class="label">Comment</label>
                <input type="text" name="content" class="form-control text-dark" placeholder="Comment">
            </div>
            <div class="form-group mb-4">
                <label class="label">Avatar</label>
                <input type="text" name="avatar_url" class="form-control text-dark" placeholder="Avatar">
            </div>
            <div class="form-group d-flex gap-3">
                <button type="submit" class="btn btn-primary text-white fw-semibold py-2 px-2 px-sm-3">
                    <span class="py-sm-1 d-block">
                        <i class="ri-add-line text-white"></i>
                        <span>Create Comment</span>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>