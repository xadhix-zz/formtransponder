<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>TypeFormHelp!</title>   
<link href="../css/bootstrap.css" rel="stylesheet" />  
<link href="../css/main.css" rel="stylesheet" />  
</head>  
<body>  
<form class="form-horizontal watching" action="./">  
        <fieldset>  
          <legend>Controls Bootstrap supports</legend>  
          <div class="control-group">  
            <label class="control-label" for="input01">Text input</label>  
            <div class="controls">  
              <input type="text" class="input-xlarge" name="input01">  
              <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>  
            </div>  
          </div>
          <div class="control-group">  
            <label class="control-label" for="textarea">Textarea</label>  
            <div class="controls">  
              <textarea class="input-xlarge" name="textarea" rows="3"></textarea>  
            </div>  
          </div>  
          <div class="form-actions">  
            <button type="submit" class="btn btn-primary">Save changes</button>  
            <button class="btn">Cancel</button>  
          </div>  
        </fieldset>  
</form>  
<script src="../js/jquery.js" type="text/javascript">
</script>
<script src="../js/jquery.deserialize.min.js" type="text/javascript">
</script>
<script src="../js/formwatcher.js" type="text/javascript">
</script>
</body>  
</html>