<?php echo $this->Html->css(array('/admin/css/treeview'));?>
<?php echo $this->Html->script(array(
    '/admin/js/jquery.cookie',
    '/admin/js/treeview',
    '/admin/js/acos',
    '/admin/js/twitter/bootstrap-buttons',
));

?>
<div class="span7">
    <div class="">
        <button class="btn danger" data-loading-text="loading..." >Generate</button>
    </div>
    <div id="acos">
        <?php echo $this->Tree->generate($results, array('alias' => 'alias', 'plugin' => 'admin', 'model' => 'Aco', 'id' => 'acos-ul', 'element' => '/permission-node')); ?>
    </div>
</div>
<div class="span7">
    <div id="aco-edit"></div>
</div>
<script type="text/javascript">
$(document).ready(function() { 
    $("#acos").treeview({collapsed: true});
});
$(function() {
    var btn = $('.btn').click(function () {
        btn.button('loading');
        $.get('<?php echo $this->Html->url('/admin/user_permissions/sync');?>', {},
            function(data){
                btn.button('reset');
                $("#acos").html(data);
            }
        );        
    })
});
</script>
