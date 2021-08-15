<h2 class="my-3">
    <?php
        echo "This is dashboard of " . $name;
    ?>
</h2>
<?php if (isset($files)) { ?>
    <table class="table">
        <tr>
        <?php foreach(json_decode($files)[0] as $single_key => $single_value) { ?>
            <?php if ($single_key != "id") { ?>
                <th> <?php echo $single_key; ?> </th>
            <?php } ?>
        <?php } ?>
        </tr>
        <?php foreach(json_decode($files) as $file) { ?>
            <tr>
                <?php foreach($file as $key => $value) { ?>
                    <?php if ($key != "id") { ?>
                        <?php if ($key == 'link') { ?>
                            <td> <a href="<?php echo $value; ?>" target="_blank">Download</a> </td>
                        <?php } else { ?>
                            <td> <?php echo $value; if ($key == 'size') echo " Mb"; ?> </td>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
<?php } else { ?>
    <h2 class="mt-5">
        No movies yet.
    </h2>
<?php } ?>