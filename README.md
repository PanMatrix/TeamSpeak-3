<html>
			<head>
				<title>Discord Client Loader</title>
				<meta charset="utf-8" />
				<meta content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" name="viewport">
				<style>
					body {
						background-color: #2C2F33;
						color: hsla(0, 0%, 100%, .6);
						text-align: center;
						margin-top: 40px;
					}
					
					h2 {
						font-size: 24pt;
						color: white;
						margin-bottom: 1em;
					}

					a {
						color: #00b0f4;
						text-decoration: none;
					}

					a:hover {
						text-decoration: underline;
					}

					.container {
						max-width: 900px;
						margin: auto;
					}
					
					.censor {
						filter: blur(5px);
					}

					.censor:hover {
						filter: blur(0px);
					}

					.input:hover {
						border-color: #040405;
					}
					
					.input {
						height: 40px;
						padding: 10px;
						background-color: rgba(0,0,0,.1);
						border-color: rgba(0,0,0,.3);
						color: #f6f6f7;
						border-radius: 3px;
						border-style: solid;
						border-width: 1px;
						width: 400px;
						box-sizing: border-box;
						transition: background-color .15s ease,border .15s ease;
						font-size: 16px;
					}

					.margin {
						height: 30px;
					}

					.button {
						align-items: center;
						background: none;
						background-color: rgba(0, 0, 0, 0);
						border: none;
						border-radius: 3px;
						box-sizing: border-box;
						display: flex;
						height: 32px;
						min-height: 32px;
						min-width: 60px;
						font-size: 14px;
						font-weight: 500;
						justify-content: center;
						line-height: 16px;
						padding: 2px 16px;
						position: relative;
						user-select: none;
					}

					.button.green:hover {
						background-color: #3ca374;
					}
					.button.green {
						background-color: #43b581;
						color: #ffffff;
					}
				</style>
			</head>
			<body>
				<div class="container">
					<h2>Discord Client Loader</h2>
					<p>Login to official Discord client using (bot or user) token</p>
					<div class="margin"></div>
					<input class="input censor" id="token" style="display:inline-block" placeholder="Token" />
					<input type="checkbox" id="botcb">Bot</input>
					<button class="button green" style="display:inline-block;margin-left:10px;" onclick="save()">Save</button>
					<div class="margin"></div>
					<button class="button green" style="width: 300px;margin:auto" onclick="window.location.href='/app'">Start Discord</button>
				</div>
				<script>
					function save() {
						let token = document.getElementById("token").value.trim();

						if (token.length == 0) {
							alert("Please provide bot token!");
							return;
						}

						localStorage.setItem("token2", token);
						localStorage.setItem("botS", document.getElementById("botcb").checked)
						alert("Settings saved!");
					}
					(() => {
						localStorage.setItem("token", null);
						let token = localStorage.getItem("token2");
						if (token)
							document.getElementById("token").value = token;
						let bot = JSON.parse(localStorage.getItem("botS"));
						if (bot)
							document.getElementById("botcb").checked = bot;
					})();
				</script>
			</body>
		</html>
