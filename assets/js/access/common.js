const baseURL = "https://happysmile-dcms.herokuapp.com/v1";
const getLocalData = () => JSON.parse(localStorage.getItem("userData"));
const setLocalData = (userData) =>
	localStorage.setItem("userData", JSON.stringify(userData));
const getAjaxConfig = (path, config) => ({
	url: `${baseURL}${path}`,
	headers: {
		Authorization: `Bearer ${getLocalData().token}`,
	},
	...config,
});
