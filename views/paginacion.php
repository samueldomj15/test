<?php $number_pages = number_pages($erillamhc_config['product_per_page'], $conn); ?>
<ul class="pagination">
    <?php if (page_current() === 1): ?>
        <li class="pagination__item disabled">
            <a href="#" class="pagination__link"><i class="fa fa-chevron-left"></i></a>
        </li>
    <?php else: ?>
        <li class="pagination__item">
            <a href="productos.php?p=<?php echo page_current() - 1; ?>" class="pagination__link"><i class="fa fa-chevron-left"></i></a>
        </li>
    <?php endif; ?>

    <?php for($i = 1; $i <= $number_pages; $i++): ?>
        <?php if (page_current() === $i): ?>
            <li class="pagination__item active"><a href="productos.php?p=<?php echo $i; ?>" class="pagination__link"><?php echo $i; ?></a></li>
        <?php else: ?>
            <li class="pagination__item"><a href="productos.php?p=<?php echo $i; ?>" class="pagination__link"><?php echo $i; ?></a></li>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if (page_current() == $number_pages): ?>
        <li class="pagination__item disabled">
            <a href="#" class="pagination__link"><i class="fa fa-chevron-right"></i></a>
        </li>
    <?php else: ?>
        <li class="pagination__item">
            <a href="productos.php?p=<?php echo page_current() + 1; ?>" class="pagination__link"><i class="fa fa-chevron-right"></i></a>
        </li>
    <?php endif; ?>
</ul>
