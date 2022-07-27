var quill = new Quill("#snow-editor-add", {
	theme: "snow",
	modules: {
		toolbar: [
			[{ font: [] }, { size: [] }],
			["bold", "italic", "underline", "strike"],
			[{ color: [] }, { background: [] }],
			[{ script: "super" }, { script: "sub" }],
			[{ header: [!1, 1, 2, 3, 4, 5, 6] }, "blockquote", "code-block"],
			[
				{ list: "ordered" },
				{ list: "bullet" },
				{ indent: "-1" },
				{ indent: "+1" },
			],
			["direction", { align: [] }],
			["link", "image", "video"],
			["clean"],
		],
	},
});

var quillModify = new Quill("#snow-editor-modify", {
	theme: "snow",
	modules: {
		toolbar: [
			[{ font: [] }, { size: [] }],
			["bold", "italic", "underline", "strike"],
			[{ color: [] }, { background: [] }],
			[{ script: "super" }, { script: "sub" }],
			[{ header: [!1, 1, 2, 3, 4, 5, 6] }, "blockquote", "code-block"],
			[
				{ list: "ordered" },
				{ list: "bullet" },
				{ indent: "-1" },
				{ indent: "+1" },
			],
			["direction", { align: [] }],
			["link", "image", "video"],
			["clean"],
		],
	},
});

var quillView = new Quill("#snow-editor-view", {
	theme: "snow",
	modules: {
		toolbar: [
			[{ font: [] }, { size: [] }],
			["bold", "italic", "underline", "strike"],
			[{ color: [] }, { background: [] }],
			[{ script: "super" }, { script: "sub" }],
			[{ header: [!1, 1, 2, 3, 4, 5, 6] }, "blockquote", "code-block"],
			[
				{ list: "ordered" },
				{ list: "bullet" },
				{ indent: "-1" },
				{ indent: "+1" },
			],
			["direction", { align: [] }],
			["link", "image", "video"],
			["clean"],
		],
	},
	readOnly: true,
});
