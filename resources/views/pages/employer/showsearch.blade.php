<div class="tr-job-posted section-padding">
    <div class="container">
        @foreach ($language as $j)

            <div role="tabpanel" class="tab-pane apply-job active show" id="archived">
                <div class="job-item remove-item">
                    <div class="job-info">
                        <div class="left-content">
                            <div class="clearfix">
                                <div class="company-logo">
                                  <p>{{ $j->language }}</p>
                                </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
