
<div class="col-12">
    <div class="container">
        <h3 class="text-center font-weight-bold pt-5">Administrator</h3>
        <div class="col-12">
            <center><div class="btn-group" role="group">           
                <a href="<?echo base_url('/admin/addknowledge_cancer');?>" class="btn btn-outline-secondary m-4">เพิ่มบทความโรคมะเร็ง</a>
                <a href="<?echo base_url('/admin/addknowledge_NCDs');?>" class="btn btn-outline-secondary m-4">เพิ่มบทความโรคเรื้อรัง</a>
                <a href="<?echo base_url('/admin/addknowledge_health');?>" class="btn btn-outline-secondary m-4">เพิ่มบทความทั่วไป</a>                
            </div></center>
            <div class="col-12">
                <div class="row">
                <div class="col-4 border"><h4>สวัสดี:<?echo $admin;?></h4></div>
                <div class="col-4 border"><a class="btn btn-primary">ออกจากระบบ</a></div>
                </div>                    
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link " id="List-tab" data-toggle="tab" href="#List" role="tab" aria-controls="List" aria-selected="true">รายชื่อผู้ติดต่อ</a>
                </li>
                <li class="nav-item dropdown" role="presentation">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">บทความโรคมะเร็ง</a>
                    <div class="dropdown-menu bg-light">             
                        <a class="dropdown-item" id="about_cancer-tab" data-toggle="tab" href="#about_cancer" role="tab" aria-controls="about_cancer" aria-selected="true">รู้จักโรคมะเร็ง</a>
                        <a class="dropdown-item" id="cancer_treatment-tab" data-toggle="tab" href="#cancer_treatment" role="tab" aria-controls="cancer_treatment" aria-selected="true">มะเร็งกับการรักษา</a>
                        <a class="dropdown-item" id="cancer_care-tab" data-toggle="tab" href="#cancer_care" role="tab" aria-controls="cancer_care" aria-selected="true">มะเร็งกับการดูแล</a>                    
                        <a class="dropdown-item" id="cancer_food-tab" data-toggle="tab" href="#cancer_food" role="tab" aria-controls="cancer_food" aria-selected="true">มะเร็งกับอาหาร</a>
                        <a class="dropdown-item" id="cancer_vdo-tab" data-toggle="tab" href="#cancer_vdo" role="tab" aria-controls="cancer_vdo" aria-selected="true">VDO</a>
                    </div>
                </li>
                <li class="nav-item dropdown" role="presentation">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">บทความโรคเรื้อรัง</a>
                    <div class="dropdown-menu bg-light">
                        <a class="dropdown-item" id="about_diabetes-tab" data-toggle="tab" href="#about_diabetes" role="tab" aria-controls="about_diabetes" aria-selected="true">ความรู้เบาหวาน</a>
                        <a class="dropdown-item" id="NCDs_knowledge-tab" data-toggle="tab" href="#NCDs_knowledge" role="tab" aria-controls="NCDs_knowledge" aria-selected="true">บทความเพื่อสุขภาพ</a>
                        <a class="dropdown-item" id="NCDs_review-tab" data-toggle="tab" href="#NCDs_review" role="tab" aria-controls="NCDs_review" aria-selected="true">รีวิวจากผู้ใช้</a>                
                        <a class="dropdown-item" id="NCDs_vdo-tab" data-toggle="tab" href="#NCDs_vdo" role="tab" aria-controls="NCDs_vdo" aria-selected="true">VDO</a>
                    </div>
                </li>
                <li class="nav-item dropdown" role="presentation">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">บทความสุขภาพทั่วไป</a>
                    <div class="dropdown-menu bg-light">
                        <a class="dropdown-item" id="health_news-tab" data-toggle="tab" href="#health_news" role="tab" aria-controls="health_news" aria-selected="true">ข่าวสุขภาพ</a>
                        <a class="dropdown-item" id="health_knowledge-tab" data-toggle="tab" href="#health_knowledge" role="tab" aria-controls="health_knowledge" aria-selected="true">บทความสุขภาพ</a>
                        <a class="dropdown-item" id="health_vdo-tab" data-toggle="tab" href="#health_vdo" role="tab" aria-controls="health_vdo" aria-selected="true">VDO</a>                    
                    </div>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="List" role="tabpanel" aria-labelledby="List-tab">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="table-primary">
                                    <th class="text-center" scope="col">วันที่ลงทะเบียน</th>
                                    <th class="text-center" scope="col">ชื่อ-นามสกุล</th>
                                    <th class="text-center" scope="col">สถานะ</th>
                                    <th class="text-center" scope="col">ชนิดมะเร็ง</th>
                                    <th class="text-center" scope="col">เบอร์โทรศัพท์</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($list->result()  As $row):?>
                                <tr>
                                    <th class="text-center" width="15%"><?date_default_timezone_set("Asia/Bangkok"); echo (date("Y-m-d",$row->day)); ?></th>
                                    <td width="20%"><?php echo $row->name;?></td>
                                    <td class="text-center" width="10%"><?php echo $row->status;?></td>
                                    <td width="25%"><?php echo $row->cancer;?></td>
                                    <td class="text-center" width="25%"><?php echo $row->phonenumber;?></td>
                                </tr>
                            <?php endforeach;?>   
                            </tbody>
                        </table>                   
                    </div>             
                </div>
                <div class="tab-pane fade" id="about_cancer" role="tabpanel" aria-labelledby="about_cancer-tab">
                    <h5 class="text-center pt-5">รู้จักโรคมะเร็ง</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="table-primary">
                                    <th class="text-center" scope="col">#</th>
                                    <th class="text-center" scope="col">topic</th>
                                    <th class="text-center" scope="col">post by</th>
                                    <th class="text-center" scope="col">postdate</th>
                                    <th class="text-center" scope="col">updatedate</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($about_cancer->result()  As $row):?>
                                <tr>
                                    <th class="text-center" width="15%">แก้ไข | ลบ</th>
                                    <td><?php echo $row->topic;?></td>
                                    <td class="text-center" width="10%"><?php echo $row->posted;?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->post_date));?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->update_date));?></td>
                                </tr>
                            <?php endforeach;?>   
                            </tbody>
                        </table>
                        
                    </div>             
                </div>
                <div class="tab-pane fade" id="cancer_treatment" role="tabpanel" aria-labelledby="cancer_treatment-tab">
                    <h5 class="text-center pt-5">มะเร็งกับการรักษา</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="table-primary">
                                    <th class="text-center" scope="col">#</th>
                                    <th class="text-center" scope="col">topic</th>
                                    <th class="text-center" scope="col">post by</th>
                                    <th class="text-center" scope="col">postdate</th>
                                    <th class="text-center" scope="col">updatedate</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($cancer_treatment->result() As $row):?>
                                <tr>
                                    <th class="text-center" width="15%">แก้ไข|ลบ</th>
                                    <td><?php echo $row->topic;?></td>
                                    <td class="text-center" width="10%"><?php echo $row->posted;?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->post_date));?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->update_date));?></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>                
                    </div>
                </div>
                <div class="tab-pane fade" id="cancer_care" role="tabpanel" aria-labelledby="cancer_care-tab">
                    <h5 class="text-center pt-5">มะเร็งกับการดูแล</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="table-primary">
                                    <th class="text-center" scope="col">#</th>
                                    <th class="text-center" scope="col">topic</th>
                                    <th class="text-center" scope="col">post by</th>
                                    <th class="text-center" scope="col">postdate</th>
                                    <th class="text-center" scope="col">updatedate</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($cancer_care->result() As $row):?>
                                <tr>
                                    <th class="text-center" width="15%">แก้ไข|ลบ</th>
                                    <td><?php echo $row->topic;?></td>
                                    <td class="text-center" width="10%"><?php echo $row->posted;?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->post_date));?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->update_date));?></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="cancer_food" role="tabpanel" aria-labelledby="cancer_food-tab">
                    <h5 class="text-center pt-5">มะเร็งกับอาหาร</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="table-primary">
                                    <th class="text-center" scope="col">#</th>
                                    <th class="text-center" scope="col">topic</th>
                                    <th class="text-center" scope="col">post by</th>
                                    <th class="text-center" scope="col">postdate</th>
                                    <th class="text-center" scope="col">updatedate</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($cancer_food->result() As $row):?>
                                <tr>
                                    <th class="text-center" width="15%">แก้ไข|ลบ</th>
                                    <td><?php echo $row->topic;?></td>
                                    <td class="text-center" width="10%"><?php echo $row->posted;?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->post_date));?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->update_date));?></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="cancer_vdo" role="tabpanel" aria-labelledby="cancer_vdo-tab">
                    <h5 class="text-center pt-5">VDO</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="table-primary">
                                    <th class="text-center" scope="col">#</th>
                                    <th class="text-center" scope="col">topic</th>
                                    <th class="text-center" scope="col">post by</th>
                                    <th class="text-center" scope="col">postdate</th>
                                    <th class="text-center" scope="col">updatedate</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($cancer_vdo->result() As $row):?>
                                <tr>
                                    <th class="text-center" width="15%">แก้ไข|ลบ</th>
                                    <td><?php echo $row->topic;?></td>
                                    <td class="text-center" width="10%"><?php echo $row->posted;?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->post_date));?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->update_date));?></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- NCDs -->
                <div class="tab-pane fade" id="about_diabetes" role="tabpanel" aria-labelledby="about_diabetes-tab">
                    <h5 class="text-center pt-5">ความรู้เบาหวาน</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="table-primary">
                                    <th class="text-center" scope="col">#</th>
                                    <th class="text-center" scope="col">topic</th>
                                    <th class="text-center" scope="col">post by</th>
                                    <th class="text-center" scope="col">postdate</th>
                                    <th class="text-center" scope="col">updatedate</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($about_diabetes->result() As $row):?>
                                <tr>
                                    <th class="text-center" width="15%">แก้ไข|ลบ</th>
                                    <td><?php echo $row->topic;?></td>
                                    <td class="text-center" width="10%"><?php echo $row->posted;?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->post_date));?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->update_date));?></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                
                </div>
                <div class="tab-pane fade" id="NCDs_knowledge" role="tabpanel" aria-labelledby="NCDs_knowledge-tab">
                    <h5 class="text-center pt-5">บทความโรคเรื้อรัง</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="table-primary">
                                    <th class="text-center" scope="col">#</th>
                                    <th class="text-center" scope="col">topic</th>
                                    <th class="text-center" scope="col">post by</th>
                                    <th class="text-center" scope="col">postdate</th>
                                    <th class="text-center" scope="col">updatedate</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($NCDs_knowledge->result() As $row):?>
                                <tr>
                                    <th class="text-center" width="15%">แก้ไข|ลบ</th>
                                    <td><?php echo $row->topic;?></td>
                                    <td class="text-center" width="10%"><?php echo $row->posted;?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->post_date));?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->update_date));?></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="NCDs_review" role="tabpanel" aria-labelledby="NCDs_review-tab">
                    <h5 class="text-center pt-5">รีวิวจากผู้ใช้</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="table-primary">
                                    <th class="text-center" scope="col">#</th>
                                    <th class="text-center" scope="col">topic</th>
                                    <th class="text-center" scope="col">post by</th>
                                    <th class="text-center" scope="col">postdate</th>
                                    <th class="text-center" scope="col">updatedate</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($NCDs_review->result() As $row):?>
                                <tr>
                                    <th class="text-center" width="15%">แก้ไข|ลบ</th>
                                    <td><?php echo $row->topic;?></td>
                                    <td class="text-center" width="10%"><?php echo $row->posted;?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->post_date));?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->update_date));?></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="NCDs_vdo" role="tabpanel" aria-labelledby="NCDs_vdo-tab">
                    <h5 class="text-center pt-5">VDO</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="table-primary">
                                    <th class="text-center" scope="col">#</th>
                                    <th class="text-center" scope="col">topic</th>
                                    <th class="text-center" scope="col">post by</th>
                                    <th class="text-center" scope="col">postdate</th>
                                    <th class="text-center" scope="col">updatedate</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($NCDs_vdo->result() As $row):?>
                                <tr>
                                    <th class="text-center" width="15%">แก้ไข|ลบ</th>
                                    <td><?php echo $row->topic;?></td>
                                    <td class="text-center" width="10%"><?php echo $row->posted;?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->post_date));?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->update_date));?></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- health -->
                <div class="tab-pane fade" id="health_news" role="tabpanel" aria-labelledby="health_news-tab">
                    <h5 class="text-center pt-5">ข่าวสุขภาพ</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="table-primary">
                                    <th class="text-center" scope="col">#</th>
                                    <th class="text-center" scope="col">topic</th>
                                    <th class="text-center" scope="col">post by</th>
                                    <th class="text-center" scope="col">postdate</th>
                                    <th class="text-center" scope="col">updatedate</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($health_news->result() As $row):?>
                                <tr>
                                    <th class="text-center" width="15%">แก้ไข|ลบ</th>
                                    <td><?php echo $row->topic;?></td>
                                    <td class="text-center" width="10%"><?php echo $row->posted;?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->post_date));?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->update_date));?></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="health_knowledge" role="tabpanel" aria-labelledby="health_knowledge-tab">
                    <h5 class="text-center pt-5">บทความสุขภาพ</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="table-primary">
                                    <th class="text-center" scope="col">#</th>
                                    <th class="text-center" scope="col">topic</th>
                                    <th class="text-center" scope="col">post by</th>
                                    <th class="text-center" scope="col">postdate</th>
                                    <th class="text-center" scope="col">updatedate</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($health_knowledge->result() As $row):?>
                                <tr>
                                    <th class="text-center" width="15%">แก้ไข|ลบ</th>
                                    <td><?php echo $row->topic;?></td>
                                    <td class="text-center" width="10%"><?php echo $row->posted;?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->post_date));?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->update_date));?></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="health_vdo" role="tabpanel" aria-labelledby="health_vdo-tab">
                    <h5 class="text-center pt-5">VDO</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="table-primary">
                                    <th class="text-center" scope="col">#</th>
                                    <th class="text-center" scope="col">topic</th>
                                    <th class="text-center" scope="col">post by</th>
                                    <th class="text-center" scope="col">postdate</th>
                                    <th class="text-center" scope="col">updatedate</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($health_vdo->result() As $row):?>
                                <tr>
                                    <th class="text-center" width="15%">แก้ไข|ลบ</th>
                                    <td><?php echo $row->topic;?></td>
                                    <td class="text-center" width="10%"><?php echo $row->posted;?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->post_date));?></td>
                                    <td class="text-center" width="25%"><?date_default_timezone_set("Asia/Bangkok");echo(date("Y-m-d",$row->update_date));?></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

test