// Navigation/Navigation.js

import {createAppContainer} from 'react-navigation'
import { createStackNavigator } from 'react-navigation-stack'
import Search from '../components/Search'
import FilmDetail from '../components/FilmDetail'
import Connexion from '../components/Connexion'

const SearchStackNavigator = createStackNavigator({
  Search: {
    screen: Search,
    navigationOptions: {
      title: 'Rechercher'
    }
  },
  FilmDetail: { // Encore une fois j'ai mis le même nom que celui du component mais libre à vous de choisir un nom différent
    screen: FilmDetail,
    navigationOptions :{
      title : 'Détail du films'
    }

  },
  Connexion: { // Encore une fois j'ai mis le même nom que celui du component mais libre à vous de choisir un nom différent
    screen: Connexion,
    navigationOptions:{
      title: 'Connexion'
    }
  }

})

export default createAppContainer(SearchStackNavigator)
