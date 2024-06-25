const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
	content: ["**/*.{html,php,js}"],
		
	important: true,
  theme: {
		container: {
      	center: true,
			padding: '15px',
    	},
		colors: {
			white:'#fff',
			black:"#000",
			current: 'currentColor',
			transparent: 'transparent',

      primary:{
				DEFAULT:"#FFCA1D",
				900:'#FED369'
			},
			secondary:{
				DEFAULT:'#2B3377',
				900:'#4B4AEF',
				800:'#686DF1',
				700:'#5C5E87',
				600:'#6C71A1',
				500:'#373C59',
				100:'#9092B0',
			},
			grey:{
				DEFAULT:'#1F1F1F',
				900:'#2C2C2C',
				800:'#494949',
				700:'#4A4A4A',
				600:'#515151',
				500:'#565656',
				400:'#585858',
				300:'#575757',
				200:'#606060',
				100:'#757575',
			},
			"vista-white":"#FAFAFF",
			orange:"#EB801D",
			"blue-diamond":"#3ADAD9",
			"gun-powder":"#3C405F",
			"santa-grey":"#9C9FBB",
			"iron":"#D7D7EB",
			"crystal-blue":"#64B7F3",
			"pink":"#F3648F",
			"sunrise-orange":"#EC7B4A",
			"saffron-mango":"#F3C758",
			"peachy-pink":"#FD9B79",
			"green":"#25D68B",
			"blue":"#4A81EC",
    },
		screens: {
      'sm'		: '641px',
      'md'		: '768px',
      'tablet': '992px',
      'lg'		: '1025px',
      'xl'		: '1281px',
      '2xl'		: '1537px',
    },
    extend: {
			fontFamily: {
				'body': ['"Nunito Sans"', ...defaultTheme.fontFamily.sans],
			},
			lineHeight:{
				'leading-tight':1.2,
				'leading-snug':1.3,
				'leading-relaxed':1.6,
				'leading-1-7':1.7,
			}
		},
  },
  plugins: [
	require('tailwindcss'),
    require('autoprefixer'),
	]
}