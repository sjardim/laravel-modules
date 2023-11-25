## About this example project

I'm evaluating the packages `nwidart/laravel-modules` and `coolsam/modules` for a future project so I decided to create a basic Laravel + Filament project and a Blog and a Pages module. 

**Note** that version 3 of `coolsam/modules` has not been officially released it, so your Laravel composer.json "minimum-stability" should be set to "dev".


You don't need a Panel for each module, it's possible to create a module without a panel, and on the main application panel (created by the default Filament install), set the ->discoverResources() method to find the module's resources 

For the Blog module, I kept a Panel, that you can access using `yourproject.test/blog/manage`. The main panel (see screenshot) is accessed as "/admin" and in its `AdminPanelProvider.php` file I called both modules.

