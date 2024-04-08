$(document).ready(function(){
 load_image_data();
 function load_image_data()
 {
  $.ajax({
   url:"php/image-upload/fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#product_table').html(data);
   }
  });
 } 
 $('#multiple_files').change(function(){
  var error_images = '';
  var form_data = new FormData();
  var files = $('#multiple_files')[0].files;
  if(files.length > 1)
  {
   error_images += 'You can not select more than a file';
  }
  else
  {
   for(var i=0; i<files.length; i++)
   {
    var name = document.getElementById("multiple_files").files[i].name;
    var ext = name.split('.').pop().toLowerCase();
    if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
    {
     error_images += '<p>Invalid '+i+' File</p>';
    }
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("multiple_files").files[i]);
    var f = document.getElementById("multiple_files").files[i];
    var fsize = f.size||f.fileSize;
    if(fsize > 5000000)
    {
     error_images += '<p>' + i + ' File Size is biger than 5mb </p>';
    }
    else
    {
     form_data.append("file[]", document.getElementById('multiple_files').files[i]);
    }
   }
  }
  if(error_images == '')
  {
   $.ajax({
    url:"php/image-upload/upload.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#error_multiple_files').html('<br /><label class="text-primary">Uploading...</label>');
    },   
    success:function(data)
    {
     $('#error_multiple_files').html('<br /><label class="text-success">Uploaded</label>');
     load_image_data();
    }
   });
  }
  else
  {
   $('#multiple_files').val('');
   $('#error_multiple_files').html("<span class='text-danger'>"+error_images+"</span>");
   return false;
  }
 });  
 $(document).on('click', '.edit', function(){
  var ProductID = $(this).attr("id");
  $.ajax({
   url:"php/image-upload/edit.php",
   method:"post",
   data:{ProductID:ProductID},
   dataType:"json",
   success:function(data)
   {
    $('#imageModal').modal('show');
    $('#ProductID').val(ProductID);
    $('#ProductName').val(data.ProductName);
    $('#ProductPrice').val(data.ProductPrice);
    $('#ProductQuantity').val(data.ProductQuantity);
    $('#ProductDetail').val(data.ProductDetail);
   }
  });
 }); 
 $(document).on('click', '.delete', function(){
  var ProductID = $(this).attr("id");
  var ProductName = $(this).data("ProductName");
  if(confirm("Are you sure you want to remove it?"))
  {
   $.ajax({
    url:"php/image-upload/delete.php",
    method:"POST",
    data:{ProductID:ProductID, ProductName:ProductName},
    success:function(data)
    {
     load_image_data();
     alert("Product removed");
    }
   });
  }
 }); 
 $('#edit_products_form').on('submit', function(event){
  event.preventDefault();
  if($('#ProductName').val() == '')
  {
   alert("Enter Product Name");
  }
  else
  {
   $.ajax({
    url:"php/image-upload/update.php",
    method:"POST",
    data:$('#edit_products_form').serialize(),
    success:function(data)
    {
     $('#imageModal').modal('hide');
     load_image_data();
     alert('Product Details updated');
    }
   });
  }
 }); 
});
