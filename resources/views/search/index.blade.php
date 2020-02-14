 @extends('layouts.master') 

 @section('title', 'Search')

 @section('content') 
  
    <div class="box box-info">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h1 style="text-align: center;">Tag : {{ $tagName }}</h1>
                </div>
                <div class="pull-right">
                    <h1 style="text-align: center;">Total Media : {{ $mediaCount }}</h1>
                </div>  
            </div>
        </div>
        @include('partials.success')
        <div class="box-body">
            <div class="gallery">
                @if(!empty($edge_hashtag_to_media->edges))  
                    <?php foreach($edge_hashtag_to_media->edges as $edges){ ?>
                    {{-- <div class="gallery-item" tabindex="0">
                        <span><?php echo (!empty($edges->node->taken_at_timestamp)) ? date('Y-m-d H:i:s', ($edges->node->taken_at_timestamp)): 'N/A'; ?></span>
                        <img src="<?php echo (!empty($edges->node->display_url)) ? $edges->node->display_url: 'https://images.unsplash.com/photo-1497445462247-4330a224fdb1?w=500&h=500&fit=crop'; ?>" class="gallery-image" alt="">
                        <div class="gallery-item-info">
                            <ul>
                                <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fa fa-heart" aria-hidden="true"></i> <?php echo (!empty($edges->node->edge_liked_by->count)) ? $edges->node->edge_liked_by->count: 0; ?></li>
                                <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fa fa-comment" aria-hidden="true"></i> <?php echo (!empty($edges->node->edge_media_to_comment->count)) ? $edges->node->edge_media_to_comment->count: 0; ?></li>
                                <li class="gallery-item-download"><span class="visually-hidden">Download:</span><a href="download.php?mid=<?php echo $edges->node->shortcode; ?>"><i class="fa fa-download" aria-hidden="true"></i> </a></li>
                            </ul>
                        </div>
                    </div> --}}
                   <?php } ?>
               @endif
               
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->
    
 @endsection