[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/5ZoPwbxv)
# PHP Codespace for MovieDB Project

이 Codespace는 Microsoft PHP Codespace 프로젝트에서 포크되었습니다.

1. MongoDB Atlas에 연결
2. `moviedb` 컬렉션에 테이블의 영화 데이터를 추가합니다(`.js` Playground 파일 사용)
3. PHP로 책의 앱을 `/`또는 `webapp` 폴더에서 개발합니다(MySQL 예제 사용)
4. Codespace에서 앱을 실행하여 작동하는지 확인합니다.
5. GitHub Desktop(또는 `.zip` 폴더)을 사용하여 프로젝트를 컴퓨터에 다운로드하여 개발을 계속합니다.
6. 로컬 컴퓨터에서 MySQL의 Workbench를 실행합니다.
7. 동일한 영화 데이터를 `moviedb_mysl` 테이블에 추가합니다.
8. XAMMP를 다운로드하여 설치합니다.
9. 프로젝트를 실행하고 발생하는 오류를 수정합니다.
10. 프로젝트가 실행되는지 확인한 후 GitHub에 다시 업로드(또는 `commit` 및 `push`)합니다!

---
## 서버 실행:

- 터미널에서 `php -S 0.0.0.0:8000`을 실행합니다.
- 이 새로운 포트에서 웹 앱에 액세스하려면 나타나는 알림에서 "브라우저에서 열기"를 클릭합니다.
  - '포트' 보기에서 전달된 포트의 정리된 표를 볼 수 있으며, **포트: 포트 보기에 집중** 명령으로 액세스할 수 있습니다.
  - '포트' 보기에서 포트 8000이 "Hello Remote World"라는 레이블이 지정되어 있습니다. `devcontainer.json`에서 전달된 포트의 레이블과 포트가 자동 전달될 때 수행할 작업과 같은 `"portsAttributes"`를 설정할 수 있습니다.
- 터미널을 다시 살펴보면 사이트 탐색의 출력이 표시되어야 합니다.

---

This Codespace is forked from the Microsoft PHP Codespace project.

1. Connect to MongoDB Atlas
2. Add movie data from the Table to your `moviedb` collection (with a `.js` Playground file)
3. Develop the app in the book in PHP (using the MySQL examples)
4. Run the app in the Codespace to confirm it works
5. Download the project to your computer using GitHub Desktop (or just the `.zip` folder) to continue development
6. On your local computer, run MySQL's Workbench
7. Add the same movie data to a `moviedb_mysl` Table
8. Download and install XAMMP
9. Try to run the Project and fix any errors that occur
10. After confirming your project runs, reupload (or `commit` and `push`) it to GitHub!

---
## Running a server:

- From the terminal, run `php -S 0.0.0.0:8000`
- Click "Open in Browser" in the notification that appears to access the web app on this new port.
  - You can view an organized table of your forwarded ports in the 'Ports' view, which can be accessed with the command **Ports: Focus on Ports View**.
  - Notice port 8000 in the 'Ports' view is labeled "Hello Remote World." In `devcontainer.json`, you can set `"portsAttributes"`, such as a label for your forwarded ports and the action to be taken when the port is autoforwarded.
- Look back at the terminal, and you should see the output from your site navigations
