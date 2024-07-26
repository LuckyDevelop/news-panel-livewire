<div>
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-body px-0 pb-2">
                    <div class="card-header pb-0">
                        <div class="d-lg-flex">
                            <div>
                                <h5 class="mb-0">News Table</h5>
                            </div>
                            <div class="ms-auto my-auto mt-lg-0 mt-4">
                                <div class="ms-auto my-auto">
                                    <a href="javascript:void(0);" class="btn bg-gradient-primary btn-sm mb-0"
                                        wire:click="addView">+&nbsp; New News</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Title
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Content
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Author</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Published At</th>
                                    <th
                                        class="text-secondary text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($news->isEmpty())
                                    <tr class="text-center">
                                        <td colspan="5">No Data</td>
                                    </tr>
                                @endif
                                @foreach ($news as $n)
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 text-sm">{{ $n->title }}</h6>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $n->content }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-xs font-weight-bold mb-0">{{ $n->author }}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ Carbon::parse($n->published_at)->format('d M Y') }}</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="javascript:void(0);"
                                                class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                data-original-title="Edit news"
                                                wire:click="editView({{ $n->id }})">
                                                Edit
                                            </a>
                                            <a href="javascript:void(0);" class="text-danger font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Delete news"
                                                wire:click="delete({{ $n->id }})">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
