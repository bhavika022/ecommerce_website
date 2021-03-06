<body>
<script type = "text/javascript">
    function validateform(){  
        var name=document.myform.name.value;  
        var description=document.myform.description.value;  
        var price=document.myform.price.value;  
        var status=document.myform.status.value;  
        
        if (name==null || name==""){  
        alert("Name can't be blank");  
        return false;  
        }
        else if (description==null || description==""){  
        alert("Description can't be blank");  
        return false;  
        }
        else if(price.length<6){  
        alert("Price must be at least 6 characters long.");  
        return false;  
        }
        else if (status==null || status==""){  
        alert("Status can't be blank");  
        return false;  
        }
        else if (image==null || image==""){  
        alert("Image can't be blank");  
        return false;  
        }
    }  
</script>

<form action="<?php echo base_url('productsCreate');?>" method="post"  name ="myform" onsubmit="return validateform()">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Name</label>
                <div class="col-md-9">
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Description</label>
                <div class="col-md-9">
                    <textarea name="description" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Price</label>
                <div class="col-md-9">
                    <input name="price" class="form-control"></input>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Status</label>
                <div class="col-md-9">
                    <input name="status" class="form-control"></input>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3" for="customFile">Image</label>
                <div class="col-md-9">
                    <input name="image" type="file" class="form-control"></input>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn btn-success">
        </div>
    </div>
</div>    
</form>
</body>
