<?php 
function displayRecipeCards($recipe)
{
    foreach($recipe as $rec): 
        ?>
    <div class="card mb-4" style="max-width: 350px; margin: 0 auto;">
            <?php if (!empty($rec['image'])): ?>
                <img src="/assets/img/<?= htmlspecialchars($rec['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($rec['title']) ?>">
            <?php endif; ?>
            <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($rec['title']) ?></h5>
                <p class="card-text">
                    <strong>Time:</strong> <?= htmlspecialchars($rec['time']) ?><br>
                    <strong>Ingredients:</strong> <?= htmlspecialchars(implode(', ', $rec['ingredients'])) ?>
                </p>
            </div>
        </div>

    <?php
    endforeach;
}
?>