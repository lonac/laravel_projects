<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<legend>
	<h2><font color="maroon">Search your church here!</font></h2></legend>
            <form>
                <div class="form-group">
                    <label for="cityname" class="col-lg-4 control-label">City Name</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control"  placeholder="city name" name="cityname">
                    </div>
                </div>

                <div class="form-group">
                    <label for="churchName" class="col-lg-4 control-label">Church Name</label>
                    <div class="col-lg-6">    
                        <input type="text" name="churchname" placeholder="Church Name" class="form-control">
                     </div>
                </div>
    
                <div class="form-group">
                    <label for="churchMinister" class="col-lg-4 control-label">Minister</label>
                    <div class="col-lg-6">
                        <input type="text" maxlength="20" placeholder="Bishop/Pastor/Reveland/minister" class="form-control" name="churchminister">
                    </div>
                </div>
            
                <div class="form-group">
                    <div class="col-lg-6 col-lg-offset-4">
                        <button type="submit" class="btn btn-primary">Search Church</button>
                    </div>
                </div> 
            </form>
</body>
</html>