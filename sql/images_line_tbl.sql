CREATE TABLE `kolesoup_recipe_book`.`images_line` ( 
    `recipe_id` INT(11) UNSIGNED NOT NULL , 
    `image_id` INT(11) UNSIGNED NOT NULL , 
    `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, 
    INDEX `recipe_image` (`recipe_id`, `image_id`)
) 
ENGINE = InnoDB;