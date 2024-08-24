<form action="{{ route('aboutoffice.update', $about->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title" class="col-form-label pt-0">Title<sup class="text-size-20 top-1">*</sup></label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $about->title }}"required>
        <small id="emailHelp" class="form-text text-muted">This is your main title</small>
    </div>
    <div class="form-group">
        <label for="satisfied_customer" class="col-form-label pt-0">satisfied customer<sup
                class="text-size-20 top-1">*</sup></label>
        <input type="text" class="form-control" id="satisfied_customer" name="satisfied_customer"
            value="{{ $about->satisfied_customer }}" required>
    </div>
    <div class="form-group">
        <label for="completion_project" class="col-form-label pt-0">Completion project<sup
                class="text-size-20 top-1">*</sup></label>
        <input type="text" class="form-control" id="completion_project" name="completion_project"
            value="{{ $about->completion_project }}"required>
    </div>
    <div class="form-group">
        <label for="experience_team" class="col-form-label pt-0">Experience Team<sup
                class="text-size-20 top-1">*</sup></label>
        <input type="text" class="form-control" id="experience_team" name="experience_team"
            value="{{ $about->experience_team }}"required>
    </div>
    <div class="form-group">
        <label for="winning_awards" class="col-form-label pt-0">Winning Awards<sup
                class="text-size-20 top-1">*</sup></label>
        <input type="number" class="form-control" id="winning_awards" name="winning_awards"
            value="{{ $about->winning_awards }}"required>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label">About Details</label>
            <textarea class="form-control textarea" name="sub_title" value="{{ $about->sub_title }}" id="summernote" rows="4">{{ old('sub_title') }}</textarea>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
