## 本リポジトリについて
- Tres InnovationのPHPチーム用のリポジトリです。
- 更新の場合は、新たにブランチ切って、プッシュしてください(何を更新したかのコメントもお忘れなく)
- マスターブランチへのマージは、誰かにチェックしてもらうなどして、競合が起こらないように注意しましょう。


#### ローカルへプロジェクトをクローン
- git clone https://github.com/kasa-s0127/php-laravel.git


#### ローカルプロジェクトを最新版へ
- git pull 


#### ブランチを切る
- git branch ＜任意のブランチ名＞
#### 上記で作成したブランチにチェックアウト(移動)
- git checkout ＜作成したブランチ名＞


#### addされていないファイルを確認
- git status
#### 編集があったファイルを追加
- git add .
    - ファイル名/ディレクトリ名を指定することで、個別にaddも可能
        - 例：git add resource/views/form (resourceの中のviewsの中のformの中身をaddする)
#### コミット
- git commit -m "コメント入力"
#### リモートリポジトリにプッシュ
- git push -u origin ＜ブランチ名＞


### マージする
#### masterブランチにチェックアウト
- git checkout master
#### マージ
- git merge ＜マージしたいブランチ名＞
#### マージ後不要になったブランチを削除
- git branch -d ＜削除したいブランチ名＞


## 他、何か必要なことがあれば、本ファイルを修正変更してマージしてください。。。