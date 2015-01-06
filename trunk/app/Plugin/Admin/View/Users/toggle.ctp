<?php echo $this->Html->image('/admin/img/icons/allow-' . $status . '.png',
                            array('onclick' => 'published.toggle("status-'.$user_id.'", "'.$this->Html->url('/admin/users/toggle/').$user_id.'/'.$status.'");',
                                  'id' => 'status-'.$user_id
        ));
?>