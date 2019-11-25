

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: 'python'
--

-- --------------------------------------------------------

--
-- Table structure for table 'users'
--

CREATE TABLE 'users' (
  'id' int(11) NOT NULL,
  'name' varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  'username' varchar(50) NOT NULL,
  'password' varchar(20) NOT NULL,
  'email' varchar(55) NOT NULL,
  'address' varchar(150) NOT NULL,
  'usertype' varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pdo`
--
ALTER TABLE 'users'
  ADD PRIMARY KEY ('id');

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pdo`
--
ALTER TABLE 'users'
  MODIFY 'id' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
