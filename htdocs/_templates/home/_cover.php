<div class="cover-text position-relative mb-2">
    <img src="logo/young-woman.png" class="bg-img w-100 img-fluid bg-body-secondary" alt="...">
    <div class="cover-overly text-center lh-5">
        <p class="animated-text1 text-secondary  p-0 m-0">Best Sale</p>
        <p class="animated-text2 text-white p-0 m-0">Up to 35% Offer</p>
        <p class="fs-6 text-secondary  m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, <br>atque animi? Natus quo enim, libero magni voluptas omnis voluptatibus esse doloremque in autem, quibusdam voluptates cumque? Explicabo ipsa quos fuga?</p>

        <?php
        $access_token = session::get("access_token");
        if (isset($access_token) && !empty($access_token)) {
        ?>
            <button type="button" class="btn" name="View">View More</button>
        <?php
        } else {
        ?>
            <a href="/signup.php" role="button" class="btn fs-4" name="signup">Signup</a>
        <?php
        }
        ?>
    </div>
</div>