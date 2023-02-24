<!-- Inclusão do cabeçalho -->
<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non nemo quibusdam quisquam eveniet quasi quos doloremque, corporis porro veritatis necessitatibus atque aperiam perferendis corrupti sit in enim possimus quaerat dignissimos.
        Repellat ab quaerat itaque accusamus minima, totam asperiores vel veniam officiis dicta! Corporis tempore quos delectus, maiores consectetur incidunt assumenda repellendus nam reprehenderit magnam minus animi corrupti, possimus saepe cumque!
        Quis porro ullam delectus error voluptas vitae cumque nam excepturi rerum illo consequuntur, at accusamus fuga eius, voluptatum, odio aut aperiam doloremque fugiat sint repellendus beatae laudantium? Libero, beatae deserunt.
        Doloribus inventore consequatur modi tempore. Error sit similique illum dolor porro minus quo, ipsa reiciendis deleniti suscipit et delectus beatae! Sed assumenda architecto doloribus veniam, animi nisi quod accusantium sit!
        Quod necessitatibus corrupti sapiente, provident iste nemo, beatae nulla aut hic perspiciatis consequuntur labore quas dolor. Iure cumque soluta omnis. Saepe, rem sit! Facere, impedit! Sapiente iusto eius quam aperiam!</p>
        <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non nemo quibusdam quisquam eveniet quasi quos doloremque, corporis porro veritatis necessitatibus atque aperiam perferendis corrupti sit in enim possimus quaerat dignissimos.
        Repellat ab quaerat itaque accusamus minima, totam asperiores vel veniam officiis dicta! Corporis tempore quos delectus, maiores consectetur incidunt assumenda repellendus nam reprehenderit magnam minus animi corrupti, possimus saepe cumque!
        Quis porro ullam delectus error voluptas vitae cumque nam excepturi rerum illo consequuntur, at accusamus fuga eius, voluptatum, odio aut aperiam doloremque fugiat sint repellendus beatae laudantium? Libero, beatae deserunt.
        Doloribus inventore consequatur modi tempore. Error sit similique illum dolor porro minus quo, ipsa reiciendis deleniti suscipit et delectus beatae! Sed assumenda architecto doloribus veniam, animi nisi quod accusantium sit!
        Quod necessitatibus corrupti sapiente, provident iste nemo, beatae nulla aut hic perspiciatis consequuntur labore quas dolor. Iure cumque soluta omnis. Saepe, rem sit! Facere, impedit! Sapiente iusto eius quam aperiam!</p>
    </div>
    <div class="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</main>

<!-- Inclusão do rodapé -->
<?php
    include_once("templates/footer.php");
?>