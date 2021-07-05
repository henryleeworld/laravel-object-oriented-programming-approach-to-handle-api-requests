# Laravel 8 物件導向方法處理應用程式介面請求

引入 juststeveking 的 laravel-transporter 套件來擴增物件導向方法處理應用程式介面請求，並提供了多種方法，輕而易舉地傳送應用程式的 HTTP 請求。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/comment/{貼文編號} 來查詢特定貼文編號相關的留言。

----

## 畫面截圖
![](https://i.imgur.com/fQCIWdE.png)
> 查詢特定貼文編號相關的留言
