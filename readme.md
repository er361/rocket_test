# Установка
1. Поднять базу через миграции
2. Поменять урл на свой * @OA\Server(url="https://rockettrade.dev/api/v1") 
в App\Http\Controllers\API\BaseController
3. запустить db:seed ну и в конфигах прописать свою базу 
4. Урл для swagger ui корень/api/documentation