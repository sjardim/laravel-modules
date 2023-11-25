## About this example project

I'm evaluating the packages `nwidart/laravel-modules` and `coolsam/modules` for a future project so I decided to create a basic Laravel + Filament project and a Blog and a Pages module. 

**Note** that version 3 of `coolsam/modules` has not been officially released it, so your Laravel composer.json "minimum-stability" should be set to "dev".

You don't need to create a Panel for each module if you don't need one. On the main application panel (created by the default Filament install), set the `->discoverResources()` method to find the module's resources 

I kept a Panel for the Blog module that you can access using `yourproject.test/blog/manage`. The main panel (see screenshot) is accessed as "/admin," and I called both modules in its `AdminPanelProvider.php` file.

![CleanShot 2023-11-25 at 16 31 39](https://github.com/sjardim/laravel-modules/assets/125217/acd424cb-240c-42a7-b996-46c21b46e581)
