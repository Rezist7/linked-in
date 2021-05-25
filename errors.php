<?php if (count($errors) > 0): ?>
    <div class = "error">
        <?php foreach ($errors as $error): ?>
            <P><?php echo $error; ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>
<style type="text/css">
	.error{
    width: 100%;
    margin: 0px auto;
    padding: 10px;
    border: 1px solid red;
    color: white;
    background: red;
    border-radius: 10px;
    text-align: left;zz
}
</style>