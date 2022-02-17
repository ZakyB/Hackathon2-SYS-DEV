// Navigation/Navigation.js

import {createAppContainer} from 'react-navigation'
import { createStackNavigator } from 'react-navigation-stack'
import ServicePro from '../components/ServicePro'
import ServiceDetail from '../components/ServiceDetail'
import Connexion from '../components/Connexion'

const SearchStackNavigator = createStackNavigator({
  Search: {
    screen: ServicePro,
    navigationOptions: {
      title: 'Rechercher'
    }
  },
  ServiceDetail: { // Encore une fois j'ai mis le même nom que celui du component mais libre à vous de choisir un nom différent
    screen: ServiceDetail,
    navigationOptions :{
      title : "'Détail d'un service'"
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
