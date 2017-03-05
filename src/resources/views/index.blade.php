<div class="row">
    <div class="col-xs-12">

    </div>
</div>
<div class="row">
    <div class="col-sm-9">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTips">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTips"
                           aria-expanded="true" aria-controls="collapseTips">
                            Helpful Tips/Strategy
                        </a>
                    </h4>
                </div>
                <div id="collapseTips" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTips">
                    <div class="panel-body">
                        <div class="alert alert-info">
                            <h2>Raid Groups</h2>
                            <?php echo \Michelf\MarkdownExtra::defaultTransform(file_get_contents(shop_heroes_storage('raid.md'))); ?>

                            <h2>7 Worker Build</h2>
                            <?php echo \Michelf\MarkdownExtra::defaultTransform(file_get_contents(shop_heroes_storage('workers.md'))); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingVideos">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseVideos"
                           aria-expanded="true" aria-controls="collapseVideos">
                            Videos
                        </a>
                    </h4>
                </div>
                <div id="collapseVideos" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingVideos">
                    <div class="panel-body">
                        <div class="alert alert-info">
                            <?php echo \Michelf\Markdown::defaultTransform(file_get_contents(shop_heroes_storage('resources.md'))); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTips">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTips"
                           aria-expanded="true" aria-controls="collapseTips">
                            FAQ's
                        </a>
                    </h4>
                </div>
                <div id="collapseTips" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTips">
                    <div class="panel-body">
                        <div class="alert alert-info">
                            <?php echo \Michelf\MarkdownExtra::defaultTransform(file_get_contents(shop_heroes_storage('faq.md'))); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                           aria-expanded="true" aria-controls="collapseOne">
                            Acknowledgements
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <div class="alert alert-success">
                            <ul>
                                <li><a href="https://docs.google.com/spreadsheets/d/1yOLklDGX2LmndWKvQuRYkAOO0WqHsudv8kvEhLWx_so/edit?usp=sharing" target="_blank">Shop Heroes Data Spreadsheet</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                           href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Helping out
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <div class="alert alert-info">

                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                           href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Release notes
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <div class="alert alert-info">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-3"></div>
</div>