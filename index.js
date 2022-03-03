$.ajax({
    type: 'POST',
    dataType: "json",
    url:'test.php',
    data:
    success: function(data)
    {
     try {
        data = JSON.parse(data);
      }catch(e) {}
      console.log(data);
    }
  });