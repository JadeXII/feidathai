<div class="col-12">
    <div class="container">
        <h1 class="text-center pt-5">รู้จักโรคมะเร็ง</h1>
        <div class="col-12">
            <div class="row">
                <?php foreach ($query->result()  As $row):?>
                <div class=" col-sm-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="<?echo base_url('/Cancer_articles/detail/');?>/<?echo $row->id;?>"><img class="card-img-top" src="<?echo base_url('/assetes/knowledgeicon/');?>/<? echo $row->post_date;?>.jpg"></a>
                        <div class="card-body">
                            <a class="text-dark" href="#<?php echo $row->id;?> "> <h6 class="card-title font-weight-bold"><? echo $row->topic;?></h6></a>
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
                        </div>
                    </div><!--card-->
                </div><!--col-4--> 
                <?php endforeach;?>
            </div><!--row-->
            <p class="text-center"><?php echo $this->pagination->create_links(); ?></p>
        </div><!---col-12-->
    </div>
</div>