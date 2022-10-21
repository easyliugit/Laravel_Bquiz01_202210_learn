# Laravel_Bquiz01_202210_learn
跟著美克叔叔實驗室學習Laravel，從202210開始。
# 參考連結
- [從零開始學Laravel 系列影片](https://www.youtube.com/playlist?list=PLL26U2k-yzXtUSppbrYKYYiGDP2kHOaUC)
- [從零開始學Laravel 系列Github](https://github.com/mackliu/laravel-bquiz01.git)
- [jQuery CDN](https://releases.jquery.com/)
- [Bootstrap CDN](https://getbootstrap.com/docs/5.2/getting-started/introduction/#cdn-links)

# 學習紀錄
## 2022/10/21
- 新增Seeder 內容
- 執行DatabaseSeeder建立預設資料 php artisan db:seed
- 執行個別UserSeeder建立預設資料 php artisan db:seed --class=UserSeeder
- 實務中很少個別執行，將所有個別種子寫入DatabaseSeeder 一起執行
- 工廠類factories 常使用測試資料
- 新增按鈕依據module 決定是否顯示
- 進站總人數、版權管理版面規劃
- 完成進站人數、版權管理控制器設置
- 整理路由布局
- 完成進站總人數、版權管理功能
- 
## 2022/10/17
- 說明工廠類factories 大量生產資料，種子類seeders 起始就有資料
- 修改題型一製作Total、Bottom 的方式，改為seeder
- 此例子為小兒科
- 建立php artisan make:seeder UserSeeder
- 
## 2022/10/16
- 前端進階使用技巧，CMS 布局
- 開始套用CMS 布局
- 建立Ad 資料表型態，php artisan make:model Ad -m
- 建立資料表，php artisan migrate
- 修改Ad 資料表型態，回上一步驟php artisan migrate:rollback
- 編輯Ad 控制器，路由連結
- 開關切換，使用餘數
- 完成Ad 新增功能
- 修改AJAX 路由錯誤，完成Ad 隱藏、刪除功能
- 
## 2022/10/15
- 設置編輯檔案功能互動視窗內容
- 使用假方法patch方式傳遞編輯動作(使用post也可以，而且單純)
- 完成編輯檔案功能
- 注意AJAX 雖請求方式為delete，但瀏覽器並沒有顯示此方法錯誤，僅顯示目標網頁找不到此請求方式
- Lavarel 本身有提供編輯驗證功能，這裡暫時不使用，完成題型一會說明
- 有條件的刪除功能，使用destroy
- AJAX 遇到CSRF 使用X-CSRF-TOKEN 處理，完成刪除功能
- 完成顯示功能
- 顯示功能防呆，只顯示一筆
- 完成題型一簡易CRUD 功能
- 
## 2022/10/14
- 完善原本題型一的功能
- 
## 2022/10/11
- 介紹Laravel 儲存檔案機制
- storage:link 建立共用連結
- public/storage <-> storage/app/public
- 完成檔案上傳，新增資料功能
- 修改檔案路徑img 至共用檔案路徑storage
- Model 是Laravel ORM 最核心的部分
- 
## 2022/10/10
- 在Controller 導入Model，取得資料表資料，使用dd()偵錯
- 修改前端版面，顯示資料表資料
- 發現軟刪除用法錯誤，刪除資料表，至migration 設定軟刪除資料表型態
- 至Model 導入軟刪除softDeletes
- 使用tinker 塞假資料，測試軟刪除，softDeletes_at 會記錄刪除時間
- 設置互動視窗內顯示的欄位類型
- 將原本在路由帶參數的動作移至控制器
- 將前端預設帶參數，改由控制器帶參數
- 互動視窗加入表單用post方式，修改按鈕
- 路由加入post導向控制器中的新增函式
- 送出表單發生錯誤代碼419 (CSRF,跨網域錯誤)
- 表單內加入@csrf，已符合Laravel post 安全機制
- 
## 2022/10/9
- 使用Controllers 完成之前在路由的進階用法，連結同版面
- 不使用Resource 建立所有的Controllers
- 建立資料庫，製作查詢功能
- make:model 建立新資料表，make:migration 調整新資料表
- make:model 加上-m，同時在migration 加上紀錄
- migration 設定資料表型態，up 建立，down 還原
- 先至.env 設定資料庫名稱，與到資料庫建立此名稱
- php artisan migrate 正式依照migration 設定資料表
- php artisan migrate:rollback 回覆上一個migrations資料表中記錄的動作(當前一步做錯時可使用)
- 塞假資料，php artisan tinker 進入Shell 狀態執行特殊指令
- 以下照打，目的是建立資料表內容
- Title::count()
- $title=new Title
- $title->text="科技大學校園資訊系統"
- $title->img="01B01.jpg"
- $title->sh=1
- $title->save() ,如果回傳true 表示建立成功,若是其他則修正上述內容重新輸入
- $all=Title::all()
- Title::count()
- 以下照打，目的是刪除資料表內容
- Title::find(1)
- $title=Title::find(1)
- $title->delete() ,如果回傳true 表示刪除成功(因為有softDeletes，不會真的刪除)
- $all=Title::all()
- Title::count()
- 輸入quit 離開Shell 狀態
- 
- 到Model/Title 設定資料表存取權
- 
## 2022/10/8
- Laravel Controller 介紹
- 請求=>路由=>視圖=>回應
- 請求=>路由=>控制器=>視圖=>回應
- 請求=>路由=>控制器=>模型=>資料庫=>模型=>控制器=>視圖=>回應
- 建議初學者，一個功能，對應一個資料表，對應一個控制器
- 路由使用redirect方法將/admin直接導向/admin/tiltle
- 路由中變數越多(不確定性)，排列越下面
- 開始使用Controller 說明7 與8 不同的使用方式
- 在某些書的作者想在8 之後的版本依舊使用7 以前方法，需要到RouteServiceProvider.php做修改
- 使用Route Groups Prefixes 建立admin 導向路徑
- 完成在路由連結控制器
- 介紹Resource Controllers 預設方法
- 
## 2022/10/7
- 使用Bootstrap Modal 載入新增視窗
- Bootstrap 5 Javascript 需要建立新物件方式呼叫Modal
- Modal 隱藏時，清除資源、刪除內容
- 在路由直接帶參數，完成不同資料帶入同一頁面
- 後台初步切版告一段落
- 
## 2022/10/6
- 使用Bootstrap 完成版型配置
- 乙級題型一後台沒有首頁，重新調整路由路徑
- 進階用法，連結同版面，在路由設定變數ex:localhost/admin/{name}，暫不使用Contrller方式
- 選單改用引入@include方式
- 使用Bootstrap 完成主要內容區域
- 
## 2022/10/5
- Laravel 前端模板Blade，
- 使用- Laravel 方便結合Vue.js 使用，提供在起始加上"@"可忽略原{{ }}"用法ex:@{{ $values }}
- 使用asset()相對路徑找到css外部檔案
- css 使用外部引入時，檔案須放置於public目錄下，並將路徑使用"{{ asset('css/style.css') }}"方法寫入，此方法Laravel 會使用相對路徑找到外部檔案
- 套用@extends，套入@section=>@yield
- 
## 2022/10/4
- 美克叔叔採用網頁設計乙級題組一作為範例來講解Laravel 的操作
- 美克叔叔盡量用Laravel 4~8 都有的方法教學
- 個人改用Laravel 9 +Bootstrap 5 學習
- 安裝Laravel 需耐心等待，避免安裝不完全
- 