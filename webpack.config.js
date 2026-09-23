const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const defaultConfig = require('@wordpress/scripts/config/webpack.config');

module.exports = {
	...defaultConfig,
	module: {
		...defaultConfig.module,
		rules: [...defaultConfig.module.rules],
	},
	context: path.resolve(__dirname, 'public/pages'),
	entry: {
		frontPage: './front-page/frontPage.js',
		termsAndConditions: './terms-and-conditions/termsAndConditions.js',
		blog: './blog/blog.js',
		blogs: './blogs/blogs.js',
		aboutUs: './about-us/aboutUs.js',
		contactUs: './contact-us/contactUs.js',
		privacyPolicy: './privacy-policy/privacyPolicy.js',
		notFound: './not-found/notFound.js',
		success: './success/success.js',
		search: './search/search.js',
		searchList: './search-list/searchList.js',
		socialHighlights: './social-highlights/socialHighlights.js',
		tattvahShows: './tattvah-shows/tattvahShows.js',
		tattvahShow: './tattvah-show/tattvahShow.js',
		newsletters: './newsletters/newsletters.js',
		newsletter: './newsletter/newsletter.js',
	},
	devServer: {
		static: './build',
		hot: true,
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: '[name]/[name].css',
		}),
	],

	output: {
		filename: '[name]/[name].bundle.js',
		path: path.resolve(__dirname, 'build'),
		publicPath: 'build',
	},
};
