<div>
    <div>
        <label>Name</label>
    </div>
    <div>
        <input type="text" name="name" value='<?php echo $bookmark->Name; ?>' /><br/>
    </div>
    <br/>
    <div>
        <label>Link</label>
    </div>
    <div>
        <input type="text" name="link" value='<?php echo $bookmark->Link; ?>' /><br/>
    </div>
</div>
<br/>
<input type="hidden" name="edit" value="<?php echo $bookmark->id; ?>"/>
<button type="submit" name="save">Save</button>
<button type="submit" name="cancel">Cancel</button>