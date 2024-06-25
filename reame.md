## **What is DeepRouting**

**DeepRouting**: is a PHP router module designed to provide a powerful, efficient, and easy-to-use routing solution for PHP applications. It simplifies the process of mapping URLs to specific handlers, allowing developers to manage their application's routes with ease.

### Key Features

- **Create Routes Easily**: Define and manage routes with simple syntax, making it easy to set up and maintain your routing logic.
- **Functional Controllers Only**: DeepRouting supports functional controllers, ensuring a clean and straightforward approach to handling requests.
- **Error Handling**: Robust error handling to manage route-related errors gracefully, including custom error pages or responses.

### Version

**1.0.0**: Use only for development for now.

## How to Use DeepRouting

1. **Clone the Git Repository**:

   Clone the repository into your project folder:

   ```sh
   git clone https://github.com/yoel0110/DeepRouting.git
   ```

2. **Include the Module in Your Project**:

   Add the module to your `index.php` or the main configuration file of your project:

   ```php
   require_once("router/router.php");
   require_once("controllers/controller.ini.php");
   ```

3. **Create a Route Instance**:

   It is recommended to create a `controller.ini.php` in your controllers folder and create a route instance. For example:

   ```php
   $router = new Router();
   ```

4. **Implement Resource Groups**:

   To create a new resource URL, you can use the `Group` method from the router:

   ```php
   $varname = $router->Group("name"); // Returns a resource group
   ```

   In this code, `"name"` is the name of your resource group. For example:

   ```php
   $users = $router->Group("user");
   ```

5. **Add Endpoints to Your Group**:

   To add endpoints to your resource group, use:

   ```php
   $groupreference->Get("/endpoint-name", $handle);
   ```

   For example:

   ```php
   $users->Get("/get", $userIndex);
   ```

6. **Handle Not Found Errors**:

   The "Not Found" error is special because you can add errors in different styles:

   ```php
   $notFound = $router->Group("error");
   ```

7. **Implement Resources Defined in Your `controller.ini.php`**:

   To implement the resources defined in your `controller.ini.php`, add this code:

   ```php
   BaseController::loadResource($name);
   BaseController::index();

   BaseController::loadResource($users);
   BaseController::index();

   BaseController::loadResource($notFound);
   BaseController::index();
   ```

   Notice that we called the static methods `loadResource` and `index` for each resource.

### Invitation for Feedback

We hope you find DeepRouting useful for your PHP projects! Your feedback is invaluable to us. We invite you to leave your opinions, suggestions, or any issues you encounter on our [GitHub repository](https://github.com/yoel0110/DeepRouting). Your contributions will help us improve and make DeepRouting even better. Thank you for your support!