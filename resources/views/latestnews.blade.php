   <!-- ***** Blog Area Start ***** -->
   <section class="dento-blog-area clearfix">
       <div class="container">
           <div class="row">
               <!--Section Heading -->
               <div class="col-12 pt-3">
                   <div class="section-heading text-center">
                       <h2>Latest News</h2>
                       <div class="line"></div>
                   </div>
               </div>
           </div>
           
           @if (count($posts) >= 1)
           <div class="row">
                       @foreach ($posts as $post)
                           <!-- Single Blog Item -->
                           <div class="col-12 col-md-6 col-lg-3">
                               <div class="single-blog-item mb-5">
                                   <a href="{{ URl('posts/' . $post->id) }}">
                                       <img src="{{ asset($post->img_path) }}" alt="">
                                   </a>
                                   <!-- Blog Content -->
                                   <div class="blog-content">
                                       <a href="{{ URl('posts/' . $post->id) }}"
                                           class="post-title">{{ Str::limit($post->title, 40) }}</a>
                                       <p>{!! Str::limit($post->body, 50) !!}</p>
                                       <div class="post-meta">
                                           <a href="{{ URl('posts/' . $post->id) }}"><i class="icon_clock_alt"></i>
                                               {{ $post->created_at->format('j F, Y') }}</a>
                                           <a href="{{ URl('posts/' . $post->id) }}"><i class="icon_chat_alt"></i>
                                               {{ $post->comments->count() }}
                                               Comments</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       @endforeach
                </div>

               @else
           <div class="col-12 col-md-12 col-lg-12">
               <div class="single-blog-item mb-100">
                   <p class="txt-center">No Post Found!</p>
               </div>
           </div>
       </div>

       @endif
       </div>
   </section>
