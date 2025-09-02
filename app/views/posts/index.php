<?php foreach($posts as $post) : ?>
                <div class="col-md-6 d-flex ftco-animate">
                	<div class="blog-entry justify-content-end">
                    <a href="posts/<?php echo $post['id']; ?>/<?php echo \Core\Helpers\slugify($post['title']); ?>" class="block-20" style="background-image: url('pictures/<?php echo $post['image'] ?>');">
                    </a>
                    <div class="text p-4 float-right d-block">
                    	<div class="topper d-flex align-items-center">
                    		<div class="one py-2 pl-3 pr-1 align-self-stretch">
                    			<span class="day">18</span>
                    		</div>
                    		<div class="two pl-0 pr-3 py-2 align-self-stretch">
                    			<span class="yr">2019</span>
                    			<span class="mos">October</span>
                    		</div>
                    	</div>
                    	<h3 class="heading mb-3"><a href='posts/<?php echo $post['id']; ?>/<?php echo \Core\Helpers\slugify($post['title']); ?>'><?php echo $post['title']; ?></a></h3>
                      <p><?php echo $post['resume']; ?></p>
                      <p><a href="posts/<?php echo $post['id']; ?>/<?php echo \Core\Helpers\slugify($post['title']); ?>" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
                    </div>
                  </div>
                  </div>

<?php endforeach; ?>


