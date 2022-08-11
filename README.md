## Installation
- git clone `https://github.com/sajjad385/kanban-board-api.git`
- `composer update`
- `cp .env.example .env`
- `php artisan key:generate`

### Setup database
- Create a database 'kanban_board_api' and configure it in .env file then run those command in project directory
- `php artisan optimize:clear`
- `php artisan migrate`
### Seed Database
- `php artisan db:seed`
### Run Project
- `php artisan serve`

Runs the app in the development mode.
Open http://127.0.0.1:8000 to test project.
Test the APIs in postman. API documentation provided with project  `api_documentation/Kanban_API.postman_collection.json'

