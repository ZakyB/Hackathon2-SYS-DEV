// App.js

import React from 'react'
import Navigation from './Navigation/Navigation'
import {NavigationContainer} from "@react-navigation/native"
import StackNavigator from './Navigation/StackNavigator.js'

export default class App extends React.Component {
  render() {
    return (
      <NavigationContainer>
      <StackNavigator/>
      </NavigationContainer>
    )
  }
}
