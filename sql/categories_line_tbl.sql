CREATE TABLE `kolesoup_recipe_book`.`categories_line` ( 
    `recipe_id` INT(11) UNSIGNED NOT NULL , 
    `category_id` INT(11) UNSIGNED NOT NULL , 
    `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, 
    INDEX `recipe_category` (`recipe_id`, `category_id`)
) 
ENGINE = InnoDB;