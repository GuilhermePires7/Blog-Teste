<?php
include_once ('templates/header.php');
include_once ('data/posts.php');
include_once ('data/categories.php');
if(isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost = 0;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>
    <main id="post-container">
        <div class="content-container">
            <h1 class="main-title"><?php echo $currentPost['title']?></h1>
            <p id="post-description"><?php echo $currentPost['description']?></p>
            <div class="img-container">
                <img src="<?php echo $BASE_URL?>/img/<?php echo $currentPost['img']?>" alt="<?php echo $currentPost['title']?>">
            </div>
            <p class="post-content">Contrary to popular belief, Lorem Ipsum
                is not simply random text. It has roots in a piece of classical
                Latin literature from 45 BC, making it over 2000 years old.
                Richard McClintock, a Latin professor at Hampden-Sydney College
                in Virginia, looked up one of the more obscure Latin words,
                consectetur, from a Lorem Ipsum passage, and going through the cites
                of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            </p>
            <p class="post-content">Contrary to popular belief, Lorem Ipsum
                is not simply random text. It has roots in a piece of classical
                Latin literature from 45 BC, making it over 2000 years old.
                Richard McClintock, a Latin professor at Hampden-Sydney College
                in Virginia, looked up one of the more obscure Latin words,
                consectetur, from a Lorem Ipsum passage, and going through the cites
                of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            </p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="categories-list">
                <?php foreach ($currentPost['tags'] as $tag) :?>
                    <li><a href="#"><?php echo $tag?></a></li>
                <?php endforeach;?>
            </ul>

            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach ($categories as $category) :?>
                    <li><a href="#"><?php echo $category?></a></li>
                <?php endforeach;?>
            </ul>
        </aside>
    </main>

<?php
include_once ('templates/footer.php');
?>