<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-tab">
                <ul class="nav nav-tabs ps-3 pe-3" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">精选推荐</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">成人直播</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">点赞榜</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="contact" aria-selected="false">收藏榜</button>
                    </li>
                </ul>
                <div class="tab-content ps-3 pe-3" id="myTabContent">
                    <div class="tab-pane fade show active fs-60" id="home" role="tabpanel" aria-labelledby="home-tab">
                        @include('site.includes.fragments._card-display')
                    </div>
                    <div class="tab-pane fade fs-60" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        @include('site.includes.fragments._card-display')
                    </div>
                    <div class="tab-pane fade fs-60" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        @include('site.includes.fragments._card-display')
                    </div>
                    <div class="tab-pane fade fs-60" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                        @include('site.includes.fragments._card-display')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
