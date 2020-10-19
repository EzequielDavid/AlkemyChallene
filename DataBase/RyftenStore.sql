USE [master]
GO
/****** Object:  Database [RyftenStore]    Script Date: 19/10/2020 19:04:25 ******/
CREATE DATABASE [RyftenStore]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'RyftenStore', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL14.SQLEXPRESS\MSSQL\DATA\RyftenStore.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'RyftenStore_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL14.SQLEXPRESS\MSSQL\DATA\RyftenStore_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
GO
ALTER DATABASE [RyftenStore] SET COMPATIBILITY_LEVEL = 140
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [RyftenStore].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [RyftenStore] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [RyftenStore] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [RyftenStore] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [RyftenStore] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [RyftenStore] SET ARITHABORT OFF 
GO
ALTER DATABASE [RyftenStore] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [RyftenStore] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [RyftenStore] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [RyftenStore] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [RyftenStore] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [RyftenStore] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [RyftenStore] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [RyftenStore] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [RyftenStore] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [RyftenStore] SET  DISABLE_BROKER 
GO
ALTER DATABASE [RyftenStore] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [RyftenStore] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [RyftenStore] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [RyftenStore] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [RyftenStore] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [RyftenStore] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [RyftenStore] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [RyftenStore] SET RECOVERY SIMPLE 
GO
ALTER DATABASE [RyftenStore] SET  MULTI_USER 
GO
ALTER DATABASE [RyftenStore] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [RyftenStore] SET DB_CHAINING OFF 
GO
ALTER DATABASE [RyftenStore] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [RyftenStore] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [RyftenStore] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [RyftenStore] SET QUERY_STORE = OFF
GO
USE [RyftenStore]
GO
/****** Object:  Table [dbo].[apps]    Script Date: 19/10/2020 19:04:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[apps](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[name] [varchar](50) NULL,
	[price] [int] NULL,
	[owner] [varchar](100) NULL,
	[description] [varchar](max) NULL,
	[image] [varchar](50) NULL,
 CONSTRAINT [PK_apps] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[users]    Script Date: 19/10/2020 19:04:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[users](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[name] [varchar](50) NULL,
	[password] [varchar](50) NULL,
 CONSTRAINT [PK_user] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET IDENTITY_INSERT [dbo].[apps] ON 
GO
INSERT [dbo].[apps] ([id], [name], [price], [owner], [description], [image]) VALUES (1, N'Instagram', 0, N'Facebook', N'Instagram es una aplicacion y red social de origen estadounidense, propiedad de Facebook, cuya funcion principal es poder compartir fotografias y videos con otros usuarios. Esta disponible para dispositivos Android, iOS y Windows 10.', N'instagram.jpg')
GO
INSERT [dbo].[apps] ([id], [name], [price], [owner], [description], [image]) VALUES (2, N'twitter', 0, N'Jack Dorsey, Evan Williams, Noah Glass, Biz Stone', N'Twitter ? es un servicio de microblogueo, con sede en San Francisco, California, EE. UU. Con filiales en San Antonio y Boston en Estados Unidos. Twitter, Inc. fue creado originalmente en California, pero está bajo la jurisdicción de Delaware desde 2007.', N'twitter.png')
GO
INSERT [dbo].[apps] ([id], [name], [price], [owner], [description], [image]) VALUES (3, N'facebook', 0, N' Mark Zuckerberg, Eduardo Saverin, Andrew McCollum, Dustin Moskovitz, Chris Hughes', N'Facebook es una compañía de origen estadounidense que ofrece servicios de redes sociales y medios sociales en línea con sede en Menlo Park, California', N'facebook.jpg')
GO
INSERT [dbo].[apps] ([id], [name], [price], [owner], [description], [image]) VALUES (4, N'Gwent', 0, N' Cd Project Red', N'Gwent: The Witcher Card Game es un videojuego de cartas coleccionables digital gratuito desarrollado y publicado por CD Projekt para Microsoft Windows, PlayStation 4 y Xbox One.', N'gwent.jpg')
GO
INSERT [dbo].[apps] ([id], [name], [price], [owner], [description], [image]) VALUES (5, N'Mobile Legends', 175, N'Moonton', N'Mobile Legends es un juego en linea para mobiles del genero Moba.
Es 5vs5 y gana el que destruya primero la base del enemigo.', N'mobileLegends.png')
GO
SET IDENTITY_INSERT [dbo].[apps] OFF
GO
SET IDENTITY_INSERT [dbo].[users] ON 
GO
INSERT [dbo].[users] ([id], [name], [password]) VALUES (1, N'Ryften', N'827ccb0eea8a706c4c34a16891f84e7b')
GO
SET IDENTITY_INSERT [dbo].[users] OFF
GO
USE [master]
GO
ALTER DATABASE [RyftenStore] SET  READ_WRITE 
GO
