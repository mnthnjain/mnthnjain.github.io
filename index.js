// Javascript code 

//reusable variable 
var oneDay = new Date(Date.now() - (24 * 3600 * 1000))
var sevenDay = new Date(Date.now() - (7 * 24 * 3600 * 1000))
var sevenDayString= sevenDay.toISOString().slice(0,19)+"Z"
var total_open_issue, last24Hours, between1DayTo7Day, before7Day;

//loader for the frontend
var loader=document.getElementById("loader")


loaderHide=()=>{loader.classList.add("hide")}
loaderShow=()=>{loader.classList.remove("hide")}

function fetchRepoDetail() {
	loaderShow()
	var repo = document.getElementById("repoName").value
	if(!repo)
	{
		alert("fill the repository name first")
		loaderHide()
		return
	}
	fetch("/search/issues?q=+type:issue+repo:" + repo + "+state:open", {
		headers: {
			"Access-Control-Allow-Origin": "*",
		}
	}).then(function (response) { 
		console.log(response)
		if (response.ok){
			return response.json()	
		}
		alert("invalid repository name")
		loaderHide()
		throw "error"

	})
		.then((data) => {
			total_open_issue = data.total_count
			fetchRepoIssues(repo)
		})
}

function fetchRepoIssues(repo, alreadyFetchedIssues=[], pageno=1) {
	return fetch("/search/issues?q=+type:issue+repo:" + repo + "+state:open+created:>=" + sevenDayString + "&per_page=100&page=" + pageno, {
		headers: {
			"Access-Control-Allow-Origin": "*",
		}
	}).then(function (response) { return response.json() })
		.then((data) => {
			alreadyFetchedIssues = alreadyFetchedIssues.concat(data.items)
			if (data.items.length === 100) {
				return fetchRepoIssues(repo, alreadyFetchedIssues, pageno + 1)
			}
			console.log(alreadyFetchedIssues)
			segregateData(alreadyFetchedIssues)
		})
}

function segregateData(issuesInLast7Days) {
	last24Hours = issuesInLast7Days.filter((elem) => {
		return new Date(elem.created_at) > oneDay;
	}).length
	between1DayTo7Day = issuesInLast7Days.length - last24Hours
	before7Day = total_open_issue - issuesInLast7Days.length
	renderOnPage()
}

function renderOnPage() {
	document.getElementById("toi").innerText = total_open_issue;
	document.getElementById("l24h").innerText = last24Hours;
	document.getElementById("24h7d").innerText = between1DayTo7Day;
	document.getElementById("b7d").innerText = before7Day;
	loaderHide()

}

function repoEntered(event){
	if (event.keyCode == 13 || event.which == 13){
			fetchRepoDetail()
	}
}