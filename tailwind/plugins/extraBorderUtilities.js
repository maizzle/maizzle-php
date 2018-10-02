const _ = require('lodash')

module.exports = ({ addUtilities, config }) => {
  _.forEach(
    {
      'color': {
        values: _.omit(config('colors'), 'default'),
        variants: ['responsive', 'hover']
      },
      'style': {
        values: ['solid', 'dashed', 'dotted', 'none'],
        variants: ['responsive', 'hover']
      }
    },
    (options, prop) => {
      addUtilities(
        _.flatMap(options.values, (value, valueClass) => {
          return _.flatMap(
            {
              't': 'top',
              'r': 'right',
              'b': 'bottom',
              'l': 'left',
            },
            (side, sideClass) => {
              return {
                [`.border-${sideClass}-${valueClass}`]: {
                  [`border-${side}-${prop}`]: `${value}`,
                }
              }
            }
          )
        }),
        options.variants
      )
    }
  )
}
