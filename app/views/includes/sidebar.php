<h3>Recent Posts</h3>
<ul class="list-group">
    <?php foreach ($recent_posts as $recent_post): ?>
        <li class="list-group-item"><a href="post?id=<?php echo $recent_post['id']; ?><?php ?>"><?php echo $recent_post['title'] ?></a></li>
    <?php endforeach; ?>
</ul>