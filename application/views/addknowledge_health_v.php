<div class="col-12 ">
    <div class="container">
        <h4 class="text-center pt-5">เพิ่มบทความสุขภาพทั่วไป</h4>
        <a class="btn btn-outline-primary" href="<?echo base_url('/admin/main');?>" role="button">กลับสู่หน้าหลัก</a>
        <form class="p-5">
            <div class="form-group row">
                <label for="topic" class="col-sm-2"><p class="font-weight-bold">หัวข้อ</p></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="topic">
                </div>
            </div>
            <div class="form-group row">
                <label for="category" class="col-sm-2" ><p class="font-weight-bold">หมวดหมู่</p></label>
                <div class="col-sm-4">
                <select class="custom-select " id="category">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="img" class="col-sm-2"><p class="font-weight-bold">ภาพปก</p></label>
                <div class="col-sm-10">
                    <input type="file" name="userfile" size="20" />
                </div>  
            </div>
            <div class="form-group row">
                <label for="detail" class="col-sm-2"><p class="font-weight-bold">เนื้อหา</p></label>
                <div class="col">
                <textarea class="ckeditor" name="DETAIL" id="editor" rows="10" cols="80"></textarea>
                </div>
            </div>
            <input type="submit" value="upload" name="submit">
        </form>
    </div>
</div>