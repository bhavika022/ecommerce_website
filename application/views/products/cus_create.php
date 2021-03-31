<body>
<script type = "text/javascript">
    function validateform(){  
        var name=document.myform.name.value;  
        var email=document.myform.email.value;  
        var phone=document.myform.phone.value;  
        var address=document.myform.address.value;  
        
        if (name==null || name==""){  
        alert("Name can't be blank");  
        return false;  
        }
        else if (email==null || email==""){  
        alert("Email can't be blank");  
        return false;  
        }
        else if(phone.length<9){  
        alert("Phone number must be at least 9 numbers long.");  
        return false;  
        }
        else if (address==null || address==""){  
        alert("Address can't be blank");  
        return false;  
        }
    }  
</script>

<form action="<?php echo base_url('customersCreate');?>" method="post"  name ="myform" onsubmit="return validateform()">
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
                <label class="col-md-3">Email</label>
                <div class="col-md-9">
                    <textarea name="email" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Phone</label>
                <div class="col-md-9">
                    <input name="phone" class="form-control"></input>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Address</label>
                <div class="col-md-9">
                    <input name="address" class="form-control"></input>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn btn-success">
        </div>
    </div>
</div>    
</form>