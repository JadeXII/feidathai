<div class="col-12">
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-8 ">
                <?php foreach ($knowledge As $row):?>
                    <h3 class=" text-left font-weight-bold pt-5">TOPIC:<?echo $row->topic;?></h3>
                    <hr class="border-bottom border-feida">
                    <?echo file_get_contents(base_url("/assetes/knowledgedata/$row->post_date.txt"));?>
                <?php endforeach;?>
                </div>
                <div class="col-sm-4 ">
                    <h3 class=" text-left font-weight-bold pt-5">ติดตามเรา</h3>
                    <hr class="border-bottom border-feida">
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v7.0"></script>
                    <div class="fb-page" data-href="https://www.facebook.com/tianxianfamily/" data-tabs="timeline" data-width="277" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/tianxianfamily/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tianxianfamily/">tianxianfamily</a></blockquote></div>
                    <h3 class="text-left font-weight-bold pt-5">บทความยอดนิยม</h3>
                    <hr class="border-bottom border-feida">
                    <div class="col-12">
                        <div class="row">
                            <?php foreach ($popular As $row):?>
                            <div class="col-12 ">
                                <img width="100%" class="img-fluid" src="<?echo base_url("/assetes/knowledgeicon/$row->post_date.jpg");?>">
                            </div>
                            <div class="col-12">
                                <p class="font-weight-bold"><? echo $row->topic;?></p>
                                <svg class="bi bi-calendar" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                            </svg>
                            <?date_default_timezone_set("Asia/Bangkok"); echo (date("Y-m-d",$row->post_date)); ?>
                            <svg class="bi bi-eye" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 001.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0014.828 8a13.133 13.133 0 00-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 001.172 8z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM4.5 8a3.5 3.5 0 117 0 3.5 3.5 0 01-7 0z" clip-rule="evenodd"/>
                            </svg>
                            <? echo $row->pageview;?>
                            <hr>
                            </div>
                            <?php endforeach;?>
                            
                        </div><!--row-->
                    
                </div>
            </div><!--row--> 
        </div><!--col-12--> 
        <hr class="border-bottom border-feida">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-4 ">
                <h5 class="text-left"><?echo $titlequery1;?></h5>
                    <hr class="border-bottom border-feida">
                    <div class="col-12">
                        <div class="row">
                            <?php foreach ($query1 As $row):?>
                            <div class="col-5 mb-4">
                                <a href="<?echo base_url("/Cancer_articles/detail/$row->id");?>">
                                    <img width="100%" class="img-fluid" src="<?echo base_url("/assetes/knowledgeicon/$row->post_date.jpg");?>">
                                </a>
                            </div>
                            <div class="col-7 mb-4">
                                <a href="<?echo base_url("/Cancer_articles/detail/$row->id");?>"><p class="font-weight-light"><? echo $row->topic;?></p></a>
                            </div>
                            <?php endforeach;?>
                            
                        </div><!--row-->
                    </div><hr class="border-bottom border-feida">
                </div>
                <div class="col-sm-4 ">
                <h5 class="text-left"><?echo $titlequery2;?></h5>
                <hr class="border-bottom border-feida">
                    <div class="col-12">
                        <div class="row">
                            <?php foreach ($query2 As $row):?>
                            <div class="col-5 mb-4">
                                <a href="<?echo base_url("/Cancer_articles/detail/$row->id");?>">
                                    <img width="100%" class="img-fluid" src="<?echo base_url("/assetes/knowledgeicon/$row->post_date.jpg");?>">
                                </a>
                            </div>
                            <div class="col-7 mb-4">
                            <a href="<?echo base_url("/Cancer_articles/detail/$row->id");?>"><p class="font-weight-light"><? echo $row->topic;?></p></a>
                            </div>
                            <?php endforeach;?>
                            
                        </div><!--row-->
                    </div><hr class="border-bottom border-feida">
                </div>
                <div class="col-sm-4 ">
                    <h5 class="text-left"><?echo $titlequery3;?></h5>
                    <hr class="border-bottom border-feida">
                    <div class="col-12">
                        <div class="row">
                            <?php foreach ($query3 As $row):?>
                            <div class="col-5 mb-4">
                                <a href="<?echo base_url("/Cancer_articles/detail/$row->id");?>">
                                    <img width="100%" class="img-fluid" src="<?echo base_url("/assetes/knowledgeicon/$row->post_date.jpg")?>">
                                </a>
                            </div>
                            <div class="col-7 mb-4">
                                <a href="<?echo base_url("/Cancer_articles/detail/$row->id");?>"><p class="font-weight-light"><? echo $row->topic;?></p></a>
                            </div>
                            <?php endforeach;?>
                            
                        </div><!--row-->
                    </div><hr class="border-bottom border-feida">
                </div>
            </div>
        </div>
    </div>
</div>