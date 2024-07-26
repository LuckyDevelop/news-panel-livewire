<div class="card">
    <div class="card-body">
        <form class="multisteps-form__form" style="height: 391px;" wire:submit.prevent="edit()">
            <div class="multisteps-form__panel pt-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                <h5 class="font-weight-bolder">News Information</h5>
                <div class="row mt-3">
                    <div class="col-12 col-sm-6">
                        <div class="input-group input-group-dynamic">
                            <label for="title" class="form-label">Title</label>
                            <input class="form-control" type="text" onfocus="focused(this)"
                                onfocusout="defocused(this)" wire:model.live="title" value="{{ $news->title }}">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                        <div class="input-group input-group-dynamic">
                            <label for="content" class="form-label">Content</label>
                            <input class="form-control" type="text" onfocus="focused(this)"
                                onfocusout="defocused(this)" wire:model.live="content" value="{{ $news->content }}">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                        <div class="input-group input-group-dynamic">
                            <label for="author" class="form-label">Author</label>
                            <input class="form-control" type="text" onfocus="focused(this)"
                                onfocusout="defocused(this)" wire:model.live="author" value="{{ $news->author }}">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                        <div class="input-group input-group-dynamic">
                            <label for="published_at" class="form-label">Published At</label>
                            <input class="form-control" type="date" onfocus="focused(this)"
                                onfocusout="defocused(this)" wire:model.live="published_at"
                                value="{{ Carbon::parse($news->published_at)->format('Y-m-d') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-row d-flex mt-0 mt-md-4">
                <button class="btn bg-gradient-secondary mb-0" type="button" title="Back"
                    wire:click="back">Back</button>
                <button class="btn bg-gradient-dark ms-auto mb-0" type="submit" title="Send">Send</button>
            </div>
        </form>
    </div>
</div>
